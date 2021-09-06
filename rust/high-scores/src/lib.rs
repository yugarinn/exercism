#[derive(Debug)]
pub struct HighScores {
    scores: &[u32],
}

impl HighScores {
    pub fn new(scores: &[u32]) -> Self {
        Self {
            scores
        }
    }

    pub fn scores(&self) -> &[u32] {
        unimplemented!("Return all the scores as a slice")
    }

    pub fn latest(&self) -> Option<u32> {
        unimplemented!("Return the latest (last) score")
    }

    pub fn personal_best(&self) -> Option<u32> {
        unimplemented!("Return the highest score")
    }

    pub fn personal_top_three(&self) -> Vec<u32> {
        unimplemented!("Return 3 highest scores")
    }
}
