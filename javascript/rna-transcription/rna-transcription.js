const DNA_RNA_MAP = {
  G: 'C',
  C: 'G',
  T: 'A',
  A: 'U',
};

export const toRna = strand => strand.replace(/[GCTA]/g, nucleotide => DNA_RNA_MAP[nucleotide])
