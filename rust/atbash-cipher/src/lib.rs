const ALPHABET: &str = "abcdefghijklmnopqrstuvwxyz";
const NUMBERS: &str = "0123456789";

pub fn encode(plain: &str) -> String {
    let mut encoded_text = String::new();
    let alphabet_length = ALPHABET.chars().count();
    let mut pushed_characters = 0;

    for character in plain.chars() {
        let is_number = NUMBERS.find(character).unwrap_or_default();

        if is_number > 0 {
            if pushed_characters > 0 && pushed_characters % 5 == 0 {
                encoded_text.push(' ');
            }

            encoded_text.push(character);
            pushed_characters += 1;
            continue;
        }

        let substitute_position;
        let lowercased_character = character.to_lowercase().collect::<Vec<_>>()[0];
        let character_position = ALPHABET.find(lowercased_character);

        match character_position {
            Some(_) => substitute_position = alphabet_length - character_position.unwrap() - 1,
            None => continue,
        }

        let substitute = ALPHABET.chars().nth(substitute_position).unwrap();

        if pushed_characters > 0 && pushed_characters % 5 == 0 {
            encoded_text.push(' ');
        }

        encoded_text.push(substitute);
        pushed_characters += 1;
    }

    return encoded_text;
}

pub fn decode(cipher: &str) -> String {
    let mut decoded_text = String::new();
    let alphabet_length = ALPHABET.chars().count();

    for character in cipher.chars() {
        let is_number = NUMBERS.find(character).unwrap_or_default();

        if is_number > 0 {
            decoded_text.push(character);
            continue;
        }

        let substitute_position;
        let character_position = ALPHABET.find(character);

        match character_position {
            Some(_) => substitute_position = alphabet_length - character_position.unwrap() - 1,
            None => continue,
        }

        let substitute = ALPHABET.chars().nth(substitute_position).unwrap();

        decoded_text.push(substitute);
    }

    return decoded_text;
}
