package lasagna

const PREPARATION_TIME_IN_MINUTES int = 40
const MINUTES_PER_LAYER int = 2

func OvenTime() int {
	return PREPARATION_TIME_IN_MINUTES
}

func RemainingOvenTime(passedMinutes int) int {
	return PREPARATION_TIME_IN_MINUTES - passedMinutes
}

func PreparationTime(numberOfLayers int) int {
	return numberOfLayers * MINUTES_PER_LAYER
}

func ElapsedTime(numberOfLayers int, passedMinutes int) int {
	return PreparationTime(numberOfLayers) + passedMinutes
}
