def sortNumber(number):
    lst = []
    for i in number:
        if (i.isnumeric()):
            lst.append(i)
    lst=sorted(lst)

    if(len(lst)==0):
        print("No number found in parameter!")
    else:
        hasil = ""
        for i in lst:
            hasil=hasil+str(i)
        print(hasil)

sortNumber("48172a94")
sortNumber("abc")
sortNumber("94abc")
