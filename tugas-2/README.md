# Tugas 2

## Soal
Buatlah notasi algoritma untuk fungsi yang menghasilkan output seperti dibawah ini
```
f(5)=   * * * * *                                              f(3)=    * * *
         * * * *                                                         * *
          * * *                                                           *
           * *                                                           * *
            *                                                           * * *
           * *                                                           
          * * *                                                           
         * * * *
        * * * * *
```
## Tinjauan

### Input
Baris pertama merupakan *count*, yaitu maksimal bintang yang akan di tampilkan

### Output
Mengeluarkan formasi jam pasir sesuai *count* yang diinputkan

### Contoh

![Example 1](https://github.com/rizky-wahyudi/bigio-task-1/blob/develop/tugas-2/example/example-1.JPG?raw=true)
![Example 2](https://github.com/rizky-wahyudi/bigio-task-1/blob/develop/tugas-2/example/example-2.JPG?raw=true)
![Example 3](https://github.com/rizky-wahyudi/bigio-task-1/blob/develop/tugas-2/example/example-3.JPG?raw=true)

## Panduan Instalasi

1. Install golang, panduan dan file instalasi golang bisa melalui tautan <https://golang.org/doc/install>
2. Clone repository atau download repository menjadi zip
    ```
    git clone https://github.com/rizky-wahyudi/bigio-task-1.git
    ```
3. Masuk ke folder Tugas 2
    ```
    cd ./bigio-task-1/tugas-2
    ```
4. Jalankan program menggunakan go run atau build menjadi binary file
    * Menjalankan program menggunakan go run
        ```
        go run sandtime.go
        ```
    * Build menjadi binary file
        ``` 
        go build sandtime.go 
        sandtime.exe
        ```