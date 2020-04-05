const DNA_RNA_MAP = {
  G: 'C',
  C: 'G',
  T: 'A',
  A: 'U',
};

export const toRna = (strand) => {
  return strand
    .split('')
    .map(nucleotide => DNA_RNA_MAP[nucleotide])
    .join('')
};
