const user = {
    nom : "Duhamel",
    prenom : "Sophie",
    age : 21,
    adress : {
        street : "BorDeaux",
    }
}

numbers = [1, 4, 6, 3, 9, 0, 2, 5];

numbers.sort((a, b) => a-b)

console.log(numbers)

for (i=0; i<numbers.length; i++){
    console.log(i, numbers[i])
}
