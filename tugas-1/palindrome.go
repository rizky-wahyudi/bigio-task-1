package main

import "fmt"

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

	for i := 0; i < len(word); i++ {
		result[i] = word[i]
		result[len(result)-1-i] = word[i]
	}

	fmt.Printf("%s", result)

}
