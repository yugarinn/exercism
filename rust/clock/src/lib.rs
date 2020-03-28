use std::fmt;

#[derive(PartialEq, Debug)]
pub struct Clock {
    hours: i32,
    minutes: i32,
}

impl Clock {
    const HOURS_CAP: i32 = 24;

    const MINUTES_CAP: i32 = 60;

    pub fn new(hours: i32, minutes: i32) -> Self {
        let computed_hours = (hours + minutes.div_euclid(Clock::MINUTES_CAP)).rem_euclid(Clock::HOURS_CAP);
        let computed_minutes = minutes.rem_euclid(Clock::MINUTES_CAP);

        Clock {
            hours: computed_hours,
            minutes: computed_minutes,
        }
    }

    pub fn add_minutes(&self, minutes: i32) -> Self {
        Clock::new(self.hours, self.minutes + minutes)
    }

    pub fn format_field(field: i32) -> String {
        if field < 10 {
            format!("0{}", field)
        } else {
            field.to_string()
        }
    }
}

impl fmt::Display for Clock {
    fn fmt(&self, f: &mut fmt::Formatter<'_>) -> fmt::Result {
        write!(f, "{}:{}", Clock::format_field(self.hours), Clock::format_field(self.minutes))
    }
}
