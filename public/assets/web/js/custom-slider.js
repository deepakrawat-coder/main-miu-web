  (function() {
            // PERFECT STACKED CARDS SLIDER - COMPLETELY FIXED

            document.addEventListener('DOMContentLoaded', function() {

                const cards = document.querySelectorAll('.stack-card');
                const totalCards = cards.length;
                const progressFill = document.querySelector('.progress-fill');
                const currentNumSpan = document.getElementById('current-num');
                const sliderSection = document.getElementById('stackSlider');
                const completionMsg = document.getElementById('completionMessage');

                if (totalCards === 0 || !sliderSection) return;

                let currentIndex = 0;
                let isAnimating = false;
                let isSliderLocked = false;
                let scrollPositionBeforeLock = 0;
                let isUserExiting = false; // Flag to track if user is exiting slider

                // Set total number
                const totalNumSpan = document.getElementById('total-num');
                if (totalNumSpan) {
                    totalNumSpan.textContent = totalCards.toString().padStart(2, '0');
                }

                // Lock body scroll
                function lockBodyScroll() {
                    if (!isSliderLocked && !isUserExiting) {
                        scrollPositionBeforeLock = window.scrollY;
                        document.body.classList.add('slider-active');
                        document.body.style.top = `-${scrollPositionBeforeLock}px`;
                        isSliderLocked = true;
                        console.log('Slider LOCKED');
                    }
                }

                // Unlock body scroll
                function unlockBodyScroll() {
                    if (isSliderLocked) {
                        document.body.classList.remove('slider-active');
                        document.body.style.top = '';
                        window.scrollTo(0, scrollPositionBeforeLock);
                        isSliderLocked = false;
                        console.log('Slider UNLOCKED');
                    }
                }

                // Force unlock (for exiting)
                function forceUnlockAndExit() {
                    isUserExiting = true;
                    unlockBodyScroll();
                    setTimeout(() => {
                        isUserExiting = false;
                    }, 100);
                }

                // Update progress and counter
                function updateProgress() {
                    if (progressFill) {
                        const progress = (currentIndex / (totalCards - 1)) * 100;
                        progressFill.style.width = progress + '%';
                    }
                    if (currentNumSpan) {
                        currentNumSpan.textContent = (currentIndex + 1).toString().padStart(2, '0');
                    }
                }

                // Update scroll hint text
                function updateScrollHint() {
                    const scrollHintSpan = document.querySelector('.scroll-hint span');
                    if (scrollHintSpan) {
                        if (currentIndex === 0) {
                            scrollHintSpan.innerHTML = '⬆️ Scroll UP to exit slider ⬆️';
                            scrollHintSpan.style.color = '#f37021';
                        } else if (currentIndex === totalCards - 1) {
                            scrollHintSpan.innerHTML = '⬇️ Scroll DOWN to exit slider ⬇️';
                            scrollHintSpan.style.color = '#10b981';
                        } else {
                            scrollHintSpan.innerHTML = '↕️ Scroll to navigate slides ↕️';
                            scrollHintSpan.style.color = '#94a3b8';
                        }
                    }
                }

                // Update cards position
                function updateCards() {
                    cards.forEach((card, idx) => {
                        card.classList.remove('active', 'prev', 'next', 'hidden');

                        if (idx === currentIndex) {
                            card.classList.add('active');
                        } else if (idx === currentIndex - 1) {
                            card.classList.add('prev');
                        } else if (idx === currentIndex + 1) {
                            card.classList.add('next');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                    updateProgress();
                    updateScrollHint();
                }

                // Go to specific card
                function goToCard(index) {
                    if (isAnimating) return;
                    if (index < 0 || index >= totalCards) return;

                    isAnimating = true;
                    currentIndex = index;
                    updateCards();

                    // Show completion message on last slide
                    if (currentIndex === totalCards - 1 && completionMsg) {
                        completionMsg.classList.add('show');
                        setTimeout(() => {
                            completionMsg.classList.remove('show');
                        }, 3000);
                    }

                    setTimeout(() => {
                        isAnimating = false;
                    }, 500);
                }

                // Next card
                function nextCard() {
                    if (currentIndex < totalCards - 1) {
                        goToCard(currentIndex + 1);
                        return true;
                    }
                    return false;
                }

                // Previous card
                function prevCard() {
                    if (currentIndex > 0) {
                        goToCard(currentIndex - 1);
                        return true;
                    }
                    return false;
                }

                // Check if slider is actively in view (not just partially)
                function isSliderActiveInView() {
                    const rect = sliderSection.getBoundingClientRect();
                    const windowHeight = window.innerHeight;
                    const scrollY = window.scrollY;

                    // Get slider's absolute position
                    const sliderTop = rect.top + scrollY;
                    const sliderBottom = rect.bottom + scrollY;

                    // Check if viewport center is within slider bounds
                    const viewportCenter = scrollY + (windowHeight / 2);

                    return viewportCenter >= sliderTop && viewportCenter <= sliderBottom;
                }

                // Handle wheel events for navigation AND exit
                let wheelTimeout = null;

                function handleWheel(e) {
                    const isInView = isSliderActiveInView();

                    // If slider not in view, ensure it's unlocked
                    if (!isInView) {
                        if (isSliderLocked) {
                            forceUnlockAndExit();
                        }
                        return;
                    }

                    // If animating, block
                    if (isAnimating) {
                        e.preventDefault();
                        return;
                    }

                    // Throttle
                    if (wheelTimeout) {
                        e.preventDefault();
                        return;
                    }

                    const delta = e.deltaY;

                    // SCROLL DOWN
                    if (delta > 0) {
                        if (currentIndex === totalCards - 1) {
                            // On LAST slide - EXIT slider (go to next section)
                            console.log('Exit slider - DOWN from last slide');
                            forceUnlockAndExit();
                            // Don't prevent default - let browser scroll
                            return;
                        } else {
                            // Not on last slide - go to next card
                            nextCard();
                            e.preventDefault();
                            // Maintain scroll position
                            if (isSliderLocked) {
                                window.scrollTo(0, scrollPositionBeforeLock);
                            }
                        }
                    }
                    // SCROLL UP
                    else if (delta < 0) {
                        if (currentIndex === 0) {
                            // On FIRST slide - EXIT slider (go to previous section)
                            console.log('Exit slider - UP from first slide');
                            forceUnlockAndExit();
                            // Don't prevent default - let browser scroll
                            return;
                        } else {
                            // Not on first slide - go to previous card
                            prevCard();
                            e.preventDefault();
                            // Maintain scroll position
                            if (isSliderLocked) {
                                window.scrollTo(0, scrollPositionBeforeLock);
                            }
                        }
                    }

                    // Set throttle
                    wheelTimeout = setTimeout(() => {
                        wheelTimeout = null;
                    }, 400);
                }

                // Handle scroll event for auto lock/unlock
                let scrollTimer = null;
                let lastScrollY = window.scrollY;

                function handleScroll() {
                    if (scrollTimer) return;

                    scrollTimer = setTimeout(() => {
                        const isInView = isSliderActiveInView();
                        const currentScrollY = window.scrollY;
                        const scrollDirection = currentScrollY > lastScrollY ? 'down' : 'up';

                        if (isInView && !isSliderLocked && !isUserExiting) {
                            // Slider came into view - lock it
                            lockBodyScroll();
                        } else if (!isInView && isSliderLocked) {
                            // Slider left view - unlock it
                            forceUnlockAndExit();
                        }

                        lastScrollY = currentScrollY;
                        scrollTimer = null;
                    }, 50);
                }

                // Touch support for mobile
                let touchStartY = 0;

                function handleTouchStart(e) {
                    if (!isAnimating) {
                        touchStartY = e.touches[0].clientY;
                    }
                }

                function handleTouchMove(e) {
                    const isInView = isSliderActiveInView();

                    if (!isInView || isAnimating) {
                        return;
                    }

                    const touchEndY = e.touches[0].clientY;
                    const diff = touchStartY - touchEndY;

                    if (Math.abs(diff) > 30) {
                        // Swipe UP (diff > 0)
                        if (diff > 0) {
                            if (currentIndex === totalCards - 1) {
                                // On last slide - exit
                                forceUnlockAndExit();
                            } else {
                                nextCard();
                                e.preventDefault();
                            }
                        }
                        // Swipe DOWN (diff < 0)
                        else if (diff < 0) {
                            if (currentIndex === 0) {
                                // On first slide - exit
                                forceUnlockAndExit();
                            } else {
                                prevCard();
                                e.preventDefault();
                            }
                        }
                        touchStartY = touchEndY;
                    }
                }

                // Add event listeners
                window.addEventListener('wheel', handleWheel, {
                    passive: false
                });
                window.addEventListener('scroll', handleScroll);

                // Touch events for mobile
                sliderSection.addEventListener('touchstart', handleTouchStart, {
                    passive: false
                });
                sliderSection.addEventListener('touchmove', handleTouchMove, {
                    passive: false
                });

                // Initialize
                function init() {
                    updateCards();
                    // Initially lock if slider is in view
                    if (isSliderActiveInView()) {
                        lockBodyScroll();
                    }
                }

                init();

                // Maintain scroll position when locked
                let maintainInterval = setInterval(() => {
                    if (isSliderLocked && isSliderActiveInView() && !isUserExiting) {
                        if (window.scrollY !== scrollPositionBeforeLock) {
                            window.scrollTo(0, scrollPositionBeforeLock);
                        }
                    }
                }, 50);

                // Cleanup
                window.addEventListener('beforeunload', () => {
                    if (maintainInterval) {
                        clearInterval(maintainInterval);
                    }
                    forceUnlockAndExit();
                });

            });
    })();


   

        //   (function() {
        //     // STRICT SCROLL LOCK STACKED SLIDER - FIXED VERSION

        //     document.addEventListener('DOMContentLoaded', function() {

        //         const cards = document.querySelectorAll('.stack-card');
        //         const totalCards = cards.length;
        //         const progressFill = document.querySelector('.progress-fill');
        //         const currentNumSpan = document.getElementById('current-num');
        //         const sliderSection = document.getElementById('stackSlider');
        //         const completionMsg = document.getElementById('completionMessage');

        //         if (totalCards === 0 || !sliderSection) return;

        //         let currentIndex = 0;
        //         let isAnimating = false;
        //         let isSliderLocked = false;
        //         let scrollPositionBeforeLock = 0;

        //         // Set total number
        //         const totalNumSpan = document.getElementById('total-num');
        //         if (totalNumSpan) {
        //             totalNumSpan.textContent = totalCards.toString().padStart(2, '0');
        //         }

        //         // Lock body scroll
        //         function lockBodyScroll() {
        //             if (!isSliderLocked) {
        //                 scrollPositionBeforeLock = window.scrollY;
        //                 document.body.classList.add('slider-active');
        //                 document.body.style.top = `-${scrollPositionBeforeLock}px`;
        //                 isSliderLocked = true;
        //             }
        //         }

        //         // Unlock body scroll
        //         function unlockBodyScroll() {
        //             if (isSliderLocked) {
        //                 document.body.classList.remove('slider-active');
        //                 document.body.style.top = '';
        //                 window.scrollTo(0, scrollPositionBeforeLock);
        //                 isSliderLocked = false;
        //             }
        //         }

        //         // Update progress and counter
        //         function updateProgress() {
        //             if (progressFill) {
        //                 const progress = (currentIndex / (totalCards - 1)) * 100;
        //                 progressFill.style.width = progress + '%';
        //             }
        //             if (currentNumSpan) {
        //                 currentNumSpan.textContent = (currentIndex + 1).toString().padStart(2, '0');
        //             }
        //         }

        //         // Update scroll hint text
        //         function updateScrollHint() {
        //             const scrollHintSpan = document.querySelector('.scroll-hint span');
        //             if (scrollHintSpan) {
        //                 if (currentIndex === 0) {
        //                     scrollHintSpan.innerHTML = '⬆️ Scroll UP to go to previous section ⬆️';
        //                     scrollHintSpan.style.color = '#f37021';
        //                 } else if (currentIndex === totalCards - 1) {
        //                     scrollHintSpan.innerHTML = '⬇️ Scroll DOWN to go to next section ⬇️';
        //                     scrollHintSpan.style.color = '#10b981';
        //                 } else {
        //                     scrollHintSpan.innerHTML = '↕️ Scroll to navigate slides ↕️';
        //                     scrollHintSpan.style.color = '#94a3b8';
        //                 }
        //             }
        //         }

        //         // Update cards position
        //         function updateCards() {
        //             cards.forEach((card, idx) => {
        //                 card.classList.remove('active', 'prev', 'next', 'hidden');

        //                 if (idx === currentIndex) {
        //                     card.classList.add('active');
        //                 } else if (idx === currentIndex - 1) {
        //                     card.classList.add('prev');
        //                 } else if (idx === currentIndex + 1) {
        //                     card.classList.add('next');
        //                 } else {
        //                     card.classList.add('hidden');
        //                 }
        //             });
        //             updateProgress();
        //             updateScrollHint();
        //         }

        //         // Go to specific card
        //         function goToCard(index) {
        //             if (isAnimating) return;
        //             if (index < 0 || index >= totalCards) return;

        //             isAnimating = true;
        //             currentIndex = index;
        //             updateCards();

        //             // Show completion message on last slide
        //             if (currentIndex === totalCards - 1 && completionMsg) {
        //                 completionMsg.classList.add('show');
        //                 setTimeout(() => {
        //                     completionMsg.classList.remove('show');
        //                 }, 3000);
        //             }

        //             setTimeout(() => {
        //                 isAnimating = false;
        //             }, 500);
        //         }

        //         // Next card
        //         function nextCard() {
        //             if (currentIndex < totalCards - 1) {
        //                 goToCard(currentIndex + 1);
        //                 return true;
        //             }
        //             return false;
        //         }

        //         // Previous card
        //         function prevCard() {
        //             if (currentIndex > 0) {
        //                 goToCard(currentIndex - 1);
        //                 return true;
        //             }
        //             return false;
        //         }

        //         // Check if slider is in viewport
        //         function isSliderInViewport() {
        //             const rect = sliderSection.getBoundingClientRect();
        //             const windowHeight = window.innerHeight;
        //             // Consider slider in view if its center is visible
        //             const sliderCenter = rect.top + rect.height / 2;
        //             return sliderCenter > 0 && sliderCenter < windowHeight;
        //         }

        //         // Handle wheel events
        //         let wheelTimeout = null;

        //         function handleWheel(e) {
        //             const isInView = isSliderInViewport();

        //             // If slider not in view, ensure it's unlocked
        //             if (!isInView) {
        //                 if (isSliderLocked) {
        //                     unlockBodyScroll();
        //                 }
        //                 return;
        //             }

        //             // If animating, block
        //             if (isAnimating) {
        //                 e.preventDefault();
        //                 return;
        //             }

        //             // Throttle
        //             if (wheelTimeout) {
        //                 e.preventDefault();
        //                 return;
        //             }

        //             const delta = e.deltaY;

        //             // SCROLL DOWN
        //             if (delta > 0) {
        //                 if (currentIndex === totalCards - 1) {
        //                     // On LAST slide - UNLOCK and let user scroll to next section
        //                     unlockBodyScroll();
        //                     // Don't prevent default - allow natural scroll
        //                     return;
        //                 } else {
        //                     // Not on last slide - go to next card
        //                     nextCard();
        //                     e.preventDefault();
        //                     // Keep scroll position locked
        //                     if (isSliderLocked) {
        //                         window.scrollTo(0, scrollPositionBeforeLock);
        //                     }
        //                 }
        //             }
        //             // SCROLL UP
        //             else if (delta < 0) {
        //                 if (currentIndex === 0) {
        //                     // On FIRST slide - UNLOCK and let user scroll to previous section
        //                     unlockBodyScroll();
        //                     // Don't prevent default - allow natural scroll
        //                     return;
        //                 } else {
        //                     // Not on first slide - go to previous card
        //                     prevCard();
        //                     e.preventDefault();
        //                     // Keep scroll position locked
        //                     if (isSliderLocked) {
        //                         window.scrollTo(0, scrollPositionBeforeLock);
        //                     }
        //                 }
        //             }

        //             // Set throttle
        //             wheelTimeout = setTimeout(() => {
        //                 wheelTimeout = null;
        //             }, 400);
        //         }

        //         // Handle scroll event for locking/unlocking
        //         let scrollTimer = null;

        //         function handleScroll() {
        //             if (scrollTimer) return;

        //             scrollTimer = setTimeout(() => {
        //                 const isInView = isSliderInViewport();

        //                 if (isInView && !isSliderLocked) {
        //                     // Slider came into view - lock it
        //                     lockBodyScroll();
        //                 } else if (!isInView && isSliderLocked) {
        //                     // Slider left view - unlock it
        //                     unlockBodyScroll();
        //                 }

        //                 scrollTimer = null;
        //             }, 50);
        //         }

        //         // Touch support for mobile
        //         let touchStartY = 0;
        //         let touchEndY = 0;

        //         function handleTouchStart(e) {
        //             if (!isAnimating) {
        //                 touchStartY = e.touches[0].clientY;
        //             }
        //         }

        //         function handleTouchMove(e) {
        //             const isInView = isSliderInViewport();

        //             if (!isInView || isAnimating) {
        //                 return;
        //             }

        //             touchEndY = e.touches[0].clientY;
        //             const diff = touchStartY - touchEndY;

        //             if (Math.abs(diff) > 30) {
        //                 // Swipe UP (diff > 0)
        //                 if (diff > 0) {
        //                     if (currentIndex === totalCards - 1) {
        //                         // On last slide - unlock
        //                         unlockBodyScroll();
        //                     } else {
        //                         // Go to next card
        //                         nextCard();
        //                         e.preventDefault();
        //                     }
        //                 }
        //                 // Swipe DOWN (diff < 0)
        //                 else if (diff < 0) {
        //                     if (currentIndex === 0) {
        //                         // On first slide - unlock
        //                         unlockBodyScroll();
        //                     } else {
        //                         // Go to previous card
        //                         prevCard();
        //                         e.preventDefault();
        //                     }
        //                 }
        //                 touchStartY = touchEndY;
        //             }
        //         }

        //         // Add event listeners
        //         window.addEventListener('wheel', handleWheel, {
        //             passive: false
        //         });
        //         window.addEventListener('scroll', handleScroll);

        //         // Touch events for mobile
        //         sliderSection.addEventListener('touchstart', handleTouchStart, {
        //             passive: false
        //         });
        //         sliderSection.addEventListener('touchmove', handleTouchMove, {
        //             passive: false
        //         });

        //         // Initialize
        //         function init() {
        //             updateCards();
        //             // Initially lock if slider is in view
        //             if (isSliderInViewport()) {
        //                 lockBodyScroll();
        //             }
        //         }

        //         init();

        //         // Maintain scroll position when locked
        //         let maintainInterval = setInterval(() => {
        //             if (isSliderLocked && isSliderInViewport()) {
        //                 if (window.scrollY !== scrollPositionBeforeLock) {
        //                     window.scrollTo(0, scrollPositionBeforeLock);
        //                 }
        //             }
        //         }, 50);

        //         // Cleanup
        //         window.addEventListener('beforeunload', () => {
        //             if (maintainInterval) {
        //                 clearInterval(maintainInterval);
        //             }
        //             unlockBodyScroll();
        //         });

        //     });
        // })();