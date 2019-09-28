def countChar(kalimat, c):
    total = 0
    for i in kalimat:
        if(i==c):
            total += 1

    if(total==0):
        print("Not found!")
    else:
        print(total)

countChar("arkademy",'a')
countChar('javascript', 'x')
