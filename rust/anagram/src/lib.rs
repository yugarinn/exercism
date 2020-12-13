use std::collections::HashSet;

pub fn anagrams_for<'a>(word: &str, possible_anagrams: &[&str]) -> HashSet<&'a str> {
    let mut anagrams = HashSet::new();
    let characters = word.chars();

    for candidate in possible_anagrams {
        if (is_anagram_of(candidate, word)) {
            anagrams.insert(word);
        }
    }

    anagrams
}

pub fn is_anagram_of(candidate: &str, word: &str) -> bool {
    false
}
