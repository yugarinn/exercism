export const isPangram = (candidate) => {
  const alphabet = 'abcdefghijklmnopqrstuvwxyz'.split('')
  const candidateCharacters = candidate.split('').map((character) => character.toLowerCase())

  return alphabet.every((character) => candidateCharacters.includes(character))
}
