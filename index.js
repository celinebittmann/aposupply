const config = {
    amount: 100,
    increment: 1,
    counterSpeed: 10
  }
  
  let counter = document.querySelector(".counter-container .number")
  let i = 0
  
  const interval = setInterval(() => {
    if (i < config.amount) {
      i += config.increment
      counter.innerText = i
    } else {
      counter.innerText = config.amount
      clearInterval(interval) // Stoppt das Intervall, sobald das Maximum erreicht ist
    }
  }, config.counterSpeed)


