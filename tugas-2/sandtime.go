package main

import (
	"fmt"
	"strings"
)

func paddingCount(count int) []int {
	var result []int = make([]int, count*2-1)

	for i := 0; i < count; i++ {
		result[i] = i
		result[len(result)-1-i] = i
	}

	return result
}

func starCount(count int) []int {
	var result []int = make([]int, count*2-1)

	for i := 0; i < count; i++ {
		result[i] = count - i
		result[len(result)-1-i] = count - i
	}

	return result
}

func f(count int) []string {

	res := make([]string, count*2-1)
	padding := paddingCount(count)
	star := starCount(count)

	for i := 0; i < len(res); i++ {
		res[i] = fmt.Sprintf("%s%s", strings.Repeat(" ", padding[i]), strings.Repeat("* ", star[i]))
	}

	return res

}

func main() {
	var count int

	fmt.Scanf("%d\n", &count)

	result := f(count)

	for i := 0; i < len(result); i++ {
		fmt.Println(result[i])
	}
}
