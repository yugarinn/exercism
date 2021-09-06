use std::collections::HashSet;

pub fn anagrams_for<'a>(word: &str, possible_anagrams: &[&'a str]) -> HashSet<&'a str> {
    let mut anagrams: HashSet<&'a str> = HashSet::new();
    let mut sorted_word: Vec<char> = word.to_lowercase().chars().collect();
    sorted_word.sort_unstable();

    for candidate in possible_anagrams {
        let mut sorted_candidate: Vec<char> = candidate.to_lowercase().chars().collect();
        sorted_candidate.sort_unstable();

        if sorted_candidate.eq(&sorted_word) && !word.to_lowercase().contains(&candidate.to_lowercase()) {
            anagrams.insert(candidate);
        }
    }

    anagrams
}
