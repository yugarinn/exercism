import { translateResistanceColors } from './resistor-color-duo.js';

describe('Resistor Colors', () => {
  test('Brown and black', () => {
    expect(translateResistanceColors(['brown', 'black'])).toEqual(10);
  });

  test('Blue and grey', () => {
    expect(translateResistanceColors(['blue', 'grey'])).toEqual(68);
  });

  test('Yellow and violet', () => {
    expect(translateResistanceColors(['yellow', 'violet'])).toEqual(47);
  });

  test('Orange and orange', () => {
    expect(translateResistanceColors(['orange', 'orange'])).toEqual(33);
  });

  test('Ignore additional colors', () => {
    expect(translateResistanceColors(['green', 'brown', 'orange'])).toEqual(51);
  })
});
