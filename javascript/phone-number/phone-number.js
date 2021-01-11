export const clean = (phoneNumber) => {
  const cleanNumber = phoneNumber.replace(/\D/g,'')
  const validation = validate(cleanNumber)

  if (!validation.isOk) {
    throw validation.error
  }

  return cleanNumber
}

const validate = (phoneNumber) => {
  const isOk = true
  let error = null

  const firstDigit = phoneNumber.split()[0]

  if (phoneNumber.length !== 10 && firstDigit !== '1') {
    error = new Error('Incorrect number of digits')
  }

  return {
    isOk,
    error,
  }
}
