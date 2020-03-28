const BANDS  = ['black', 'brown', 'red', 'orange', 'yellow', 'green', 'blue', 'violet', 'grey', 'white'];

const getColorIndex = (color) => BANDS.indexOf(color);

export const decodedValue = (colors) => {
  return getColorIndex(colors[0]) * 10 + getColorIndex(colors[1]);
};
