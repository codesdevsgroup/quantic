window.sr = ScrollReveal({ reset: true })

sr.reveal(`
  .scr_top
`, {
  origin: 'top',
  distance: '50px',
  duration: 600,
  easing: 'ease',
  delay: 500,
})

sr.reveal(`
  .scr_top_nr
`, {
  origin: 'top',
  distance: '50px',
  duration: 500,
  easing: 'ease',
  delay: 400,
  mobile: false,
  reset: false,
})

sr.reveal(`
  .scr_right
`, {
  origin: 'right',
  distance: '70px',
  duration: 500,
  mobile: false,
  easing: 'ease'
})

sr.reveal(`
  .scr_left
`, {
  origin: 'left',
  distance: '70px',
  duration: 500,
  easing: 'ease'
})

sr.reveal(`
  .scr_left_slow_1
`, {
  origin: 'left',
  distance: '70px',
  duration: 800,
  easing: 'ease'
})

sr.reveal(`
  .scr_left_slow_2
`, {
  origin: 'left',
  distance: '70px',
  duration: 1100,
  easing: 'ease'
})

sr.reveal(`
  .scr_left_slow_3
`, {
  origin: 'left',
  distance: '70px',
  duration: 1400,
  easing: 'ease'
})

sr.reveal(`
  .scr_bottom
`, {
  delay: 200,
  distance: '20px',
  duration: 800,
  easing: 'ease-in-out',  
  origin: 'bottom',
  reset: true
});

sr.reveal(`
  .scr_bottom_effects
`, {
  delay: 400,
  distance: '50px',
  duration: 800,
  easing: 'ease-in-out',
  origin: 'bottom',
  reset: true,
  opacity: 0.2,
  duration: 800
});