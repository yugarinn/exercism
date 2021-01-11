const hey = (message) => {
  if (isQuestion(message) && isYelling(message)) {
    return 'Calm down, I know what I\'m doing!'
  }

  if (isQuestion(message)) {
    return 'Sure.'
  }

  if (isYelling(message)) {
    return 'Whoa, chill out!'
  }

  if (isSilence(message)) {
    return 'Fine. Be that way!'
  }

  return 'Whatever.'
}

const isQuestion = (message) => {
  return message.trim().charAt(message.length - 1) === '?'
}

const isYelling = (message) => {
  const formattedMessage = message.replace(/[^0-9,.!?\(\)\[\]: ]/, '')

  console.log(formattedMessage)

  return message.replace(/[^0-9,.!?\(\)\[\]: ]/, '') === message.toUpperCase()
}

const isSilence = (message) => {
  return message.replace(/\n\r\t]/g, '').trim() === ''
}

module.exports = { hey }
