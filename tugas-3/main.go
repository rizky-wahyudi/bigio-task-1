package main

import "fmt"

//ASCII untuk convert byte menjadi ASCII keyboard mulai dari '1'
const ASCII = 49

func main() {
	var numbers [9][9]byte

	for i := 0; i < len(numbers); i++ {
		for j := 0; j < len(numbers); j++ {
			numbers[i][j] = ' '
			// numbers[i][len(numbers)-1-j] = byte(i + 1)
		}
	}
	for i := 0; i <= len(numbers)/2; i++ {
		for j := 0; j <= i; j++ {
			numbers[i][j] = byte(j + ASCII)
			numbers[i][len(numbers)-1-j] = byte(j + ASCII)
			numbers[len(numbers)-1-i][j] = byte(j + ASCII)
			numbers[len(numbers)-1-i][len(numbers)-1-j] = byte(j + ASCII)
		}
	}
	for i := 0; i < len(numbers); i++ {
		for j := 0; j < len(numbers); j++ {
			fmt.Printf("%c", numbers[i][j])

		}
		fmt.Println()
	}
}
