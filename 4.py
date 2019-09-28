def thirdHighest(arrNumber):
    lst = []
    if(type(arrNumber)==list):
        if(len(arrNumber)<3):
            print("Minimal array length is 3!")
        else:
            for i in arrNumber:
                if type(i)== int:
                    lst.append(i)
            lst.sort(reverse=True)
            print(lst[2])
    else:
        print("Parameter should be an array!")
        


thirdHighest([1,2,3,4,5])
thirdHighest([1,4,5])
thirdHighest(1)
thirdHighest('a')
thirdHighest([107,1,-4,'a','true',0, -77])
