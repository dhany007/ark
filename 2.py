import re

def is_username_valid(username):
    valid = True
    punct = re.compile('[@_!#$%^&*()<>?/\|}{~:]') 

    if len(username)!= 6:
        valid = False
        
    elif len(re.findall("\d", username)) > 0:
        valid = False;

    elif punct.search(username) != None :
        valid = False;

    return valid

def is_password_valid(password):
    valid = True

    if len(password)<5 or len(password)>10:
        valid = False;

    elif(len(re.findall("^7",password))<0):
        valid = False

    elif(len(re.findall("[a-z]",password))==0):
        valid = False

    elif(len(re.findall("[0-9]",password))==0):
        valid = False

    elif(len(re.findall("[A-Z]",password))==0):
        valid = False
        
    return valid


print(is_username_valid("cobaqa"))
print(is_username_valid("cobaa"))
print(is_username_valid("Cobaqa"))
print(is_username_valid("Cobaqaaa"))
print(is_username_valid("Cobaq8"))
print(is_username_valid("Cobaq_"))


print(is_password_valid("co23"))
print(is_password_valid("coba33333v"))
print(is_password_valid("7oba33333"))
print(is_password_valid("7oCa33333"))
