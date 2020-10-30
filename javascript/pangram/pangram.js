export const isPangram = (candidate) => {
  const alphabet = 'abcdefghijklmnopqrstuvwxyz'.split('')
  const candidateCharacters = candidate.split('').map((character) => character.toLowerCase())


  return alphabet.map((character) => candidateCharacters.includes(character))
                 .reduce((carried, current) => carried && current, true)
}
