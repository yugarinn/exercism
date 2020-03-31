export const gigasecond = (date) => {
  const seconds = 1000000000000;

  return new Date(date.getTime() + seconds);
};
