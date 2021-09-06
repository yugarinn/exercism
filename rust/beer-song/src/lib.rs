pub fn verse(n: u32) -> String {
    let verse;

    if n == 0 {
        verse = String::from("No more bottles of beer on the wall, no more bottles of beer.\nGo to the store and buy some more, 99 bottles of beer on the wall.\n")
    } else {
        verse = String::from("{} bottle of beer on the wall, {} bottle of beer.\nTake it down and pass it around, no more bottles of beer on the wall.\n")
    }

    verse
}

pub fn sing(start: u32, end: u32) -> String {
    unimplemented!("sing verses {} to {}, inclusive", start, end)
}
