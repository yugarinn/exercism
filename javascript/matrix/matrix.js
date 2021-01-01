export class Matrix {
  constructor(seed) {
    this.elements = this.parseElements(seed)
  }

  parseElements(seed) {
    const EOL = '\n'

    return seed.split(' ').reduce((elements, character) => {
      if (character.includes(EOL)) {
        const splittedElements = character.split(EOL)

        elements[elements.length - 1].push(parseInt(splittedElements[0]))
        elements.push([parseInt(splittedElements[1])])
      } else {
        elements[elements.length - 1].push(parseInt(character))
      }

      return elements
    }, new Array([]))
  }

  get rows() {
    return this.elements
  }

  get columns() {
    return this.transposed
  }

  get transposed() {
    return this.elements[0].map((column, index) => this.elements.map((row) => row[index]))
  }
}
