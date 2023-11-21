import random

# Step 1: Generate random numbers
random_numbers = [random.randint(1, 100) for _ in range(20)]

# Step 2: Create empty lists for even and odd numbers
list_genap = []
list_ganjil = []

# Step 3: Separate numbers into even and odd lists
for num in random_numbers:
    if num % 2 == 0:
        list_genap.append(num)
    else:
        list_ganjil.append(num)

# Step 4: Find max and position for even and odd numbers
max_genap = max(list_genap, default=None)

max_ganjil = max(list_ganjil, default=None)

# Step 5: Calculate the count for even and odd numbers
count_genap = len(list_genap)
count_ganjil = len(list_ganjil)

# Step 6: Calculate the sum for even and odd numbers
sum_genap = sum(list_genap)
sum_ganjil = sum(list_ganjil)

# Output the results
print(f"Angka acak: {random_numbers}")
print(f"Angka genap: {list_genap}")
print(f"Angka ganjil: {list_ganjil}")
print(f"Bilangan genap maskimal: {max_genap}")
print(f"Bilangan ganjil maksimal: {max_ganjil}")
print(f"Jumlah List bilangan genap: {count_genap}")
print(f"Jumlah List bilangan ganjil: {count_ganjil}")
print(f"Jumlah bilangan genap: {sum_genap}")
print(f"Jumlah bilangann ganjil: {sum_ganjil}")
