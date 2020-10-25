package main

import (
	"testing"
)

func TestPalindrome1(t *testing.T) {
	word := []byte{'P', 'H', 'O', 'B', 'I', 'A'}
	actual := palindromeGenerator(word)
	expectation := "PHOBIAIBOHP"
	if string(actual) != expectation {
		t.Errorf("Expected %s but got %s", expectation, actual)
	}
}

func TestPalindrome2(t *testing.T) {
	word := []byte{'K', 'A', 'S', 'U', 'R'}
	actual := palindromeGenerator(word)
	expectation := "KASURUSAK"
	if string(actual) != expectation {
		t.Errorf("Expected %s but got %s", expectation, actual)
	}
}

func TestPalindrome3(t *testing.T) {
	word := []byte{'A', 'D', 'A'}
	actual := palindromeGenerator(word)
	expectation := "ADADA"
	if string(actual) != expectation {
		t.Errorf("Expected %s but got %s", expectation, actual)
	}
}

func TestPalindrome4(t *testing.T) {
	word := []byte{'B', 'I', 'G', 'I', 'O'}
	actual := palindromeGenerator(word)
	expectation := "BIGIOIGIB"
	if string(actual) != expectation {
		t.Errorf("Expected %s but got %s", expectation, actual)
	}
}

func TestPalindrome5(t *testing.T) {
	word := []byte{'D', 'E', 'V', 'E', 'L', 'O', 'P', 'E', 'R'}
	actual := palindromeGenerator(word)
	expectation := "DEVELOPEREPOLEVED"
	if string(actual) != expectation {
		t.Errorf("Expected %s but got %s", expectation, actual)
	}
}
