export const gigasecond = (date) => {
  const GIGASECOND_IN_MS = 1e12;

  return new Date(date.getTime() + GIGASECOND_IN_MS);
};
