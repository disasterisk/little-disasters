import os
# user input functions
def userbool(b):
        if b.lower() == "y" or b == "1":
            return True
        elif b.lower() == "n" or b == "0":
            return False
        else:
            b = userbool(input("Try typing 'y' or 'n'. "))
            return b


def userint(i):
    try:
        i = int(i)
        return i
    except:
        i = userint(input("Please enter a valid integer."))
        return i


def cls():
    os.system('cls' if os.name=='nt' else 'clear')

# apps
def collatz(x):
    count = 0
    while x != 1:
        if x%2 == 0:
            x = int(x/2)
            print(x)
        else:
            x = int(x*3+1)
            print(x)
        count += 1
    print(str(count) + " steps to 1.")

while True:
    print("Welcome to MiniCompy 0.0")
    off = False
    while not off:
        collatz(userint(input("Enter a number. ")))
        off = userbool(input("Would you like to quit? (y/n) "))
    cls()
