pub fn raindrops(number: u32) -> String {
    let mut sound = String::from("");

    if number % 3 == 0 {
        sound.push_str("Pling");
    }

    if number% 5 == 0 {
        sound.push_str("Plang");
    }

    if number % 7 == 0 {
        sound.push_str("Plong");
    }

    if sound.chars().count() != 0 {
        return sound;
    }

    return number.to_string();
}
