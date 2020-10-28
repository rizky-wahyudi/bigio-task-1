# Tugas 1

## Soal
Buatlah sebuah program yang menerima input beberapa karakter dan mengeluarkan output bentuk polindrome dari rangkaian karakter tersebut, misal:

Input : P, H, O, B, I, A (*diinputkan satu persatu)
Output : PHOBIAIBOHP

## Tinjauan

### Input
Baris pertama merupakan *length*, yaitu banyaknya huruf yang akan diinputkan oleh pengguna
Baris selanjutnya sampai dengan *length* merupakan huruf yang diinputkan oleh pengguna untuk dibentuk menjadi palindrome

### Output
Mengeluarkan satu baris yang berisi kata yang memiliki sifat palindrome dari huruf yang telah diinputkan pengguna

### Contoh

![Tux, the Linux mascot](https://github.com/rizky-wahyudi/bigio-task-1/blob/develop/tugas-1/example/example-1.JPG?raw=true)

## Panduan Instalasi

1. Install golang, panduan dan file instalasi golang bisa melalui tautan <https://golang.org/doc/install>
2. Clone repository atau download repository menjadi zip
    ```
    git clone https://github.com/rizky-wahyudi/bigio-task-1.git
    ```
3. Masuk ke folder Tugas 1
    ```
    cd ./bigio-task-1/tugas-1
    ```
4. Jalankan program menggunakan go run atau build menjadi binary file
    * Menjalankan program menggunakan go run
        ```
        go run palindrome.go
        ```
    * Build menjadi binary file
        ``` 
        go build palindrome.go 
        palindrome.exe
        ```
        
## Testing

Testing dapat dilakukan dengan menjalankan file testing yang ada
```
go test palindrome.go palindrome_test.go -v
```