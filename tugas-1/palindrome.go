package main

import "fmt"

func palindromeGenerator(word []byte) []byte {

	var result []byte = make([]byte, len(word)*2-1)

	for i := 0; i < len(word); i++ {
		result[i] = word[i]
		result[len(result)-1-i] = word[i]
	}

	return result

}

func main() {
	var length int
	var word []byte
	var result []byte

	fmt.Scanf("%d\n", &length)

	word = make([]byte, length)
	result = make([]byte, length*2-1)

	for i := 0; i < length; i++ {
		fmt.Scanf("%c\n", &word[i])
	}

	result = palindromeGenerator(word)

	fmt.Printf("%s", result)

}
