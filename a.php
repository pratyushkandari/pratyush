<!DOCTYPE html>
<html>
<head>
  <title>Calculate letter Frequency</title>
  
</head>
<body>
  
</body>
<script >
   
   function calculateLetterFrequency(str) {
    const frequency = {};

    str = str.toLowerCase();

    for (let i = 0; i < str.length; i++) {
        const char = str[i];

        if (!/[a-z]/.test(char)) continue;

        if (!frequency[char]) {
            frequency[char] = 1;
        }
        else {
            frequency[char]++;
        }
    }

    return frequency;
}
const inputString = "Hello, World!";
const letterFrequency = calculateLetterFrequency(inputString);
console.log(letterFrequency);



</script>
</html>
