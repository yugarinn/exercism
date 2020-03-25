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
        Clock {
            hours: Clock::compute_hours(hours, minutes),
            minutes: Clock::compute_minutes(minutes),
        }
    }

    pub fn add_minutes(&self, minutes: i32) -> Self {
        unimplemented!("Add {} minutes to existing Clock time", minutes);
    }

    pub fn compute_hours(hours: i32, minutes: i32) -> i32 {
        let total_hours: i32 = (minutes / Clock::MINUTES_CAP) + hours;
        let computed_hours: i32 = total_hours % Clock::HOURS_CAP;

        if computed_hours < Clock::HOURS_CAP {
            computed_hours
        } else {
            0
        }
    }

    pub fn compute_minutes(minutes: i32) -> i32 {
        let computed_minutes: i32 = minutes % Clock::MINUTES_CAP;

        if computed_minutes < Clock::MINUTES_CAP {
            computed_minutes
        } else {
            0
        }
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
