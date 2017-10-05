all: main car
	gcc -o carExample main.o car.o

main: main.c
	gcc -o main.o -c main.c

car: car.c
	gcc -o car.o -c car.c

clean:
	rm *.o carExample