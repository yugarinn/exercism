const BANDS  = ['black', 'brown', 'red', 'orange', 'yellow', 'green', 'blue', 'violet', 'grey', 'white'];

export const decodedValue = (colors) => {
  return parseInt(`${BANDS.indexOf(colors[0])}${BANDS.indexOf(colors[1])}`);
};
