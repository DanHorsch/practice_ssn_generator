# practice_ssn_generator


A PHP practice program that generates all possible Social Security Numbers that meet the following criteria:


1. Social Security Numbers are in the format of ###-##-####

2. The first 3-digit piece of the SSN is a prime number

3. The second 2-digit piece of the SSN is a prime number

4. The third 4-digit piece of the SSN is a prime number

5. The entire 9-digit number is a prime number


Example test cases:

002-02-0002 would not pass because while the first four criteria would be met (2 is prime), the last case is not met (2020002 is not prime).

002-02-0003 would pass all five criteria because 2, 3, and 2020003 are all prime.

 
