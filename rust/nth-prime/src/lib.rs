pub fn nth(position: u32) -> u32 {
    let mut found_primes: u32 = 0;
    let mut prime_at_position: u32 = 0;

    for number in 2..u32::max_value() {
        if position == 0 || (position != 0 && found_primes == position) {
            prime_at_position = number;
            break;
        }

        if is_prime(number) {
            found_primes += 1;
        }
    }

    prime_at_position
}

fn is_prime(number: u32) -> bool {
    for current in 2..number {
        if current % number == 0 {
            return false;
        }
    }

    true
}
