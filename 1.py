import json

def biodata(name,
            age,
            address,
            hobbies = [],
            is_married = False,
            key_name = "",
            year_in = "",
            year_out = "",
            major = "",
            skill_name = "",
            level = "",
            interest_in_coding = True
            ):
    
    a = {
         'name' : name,
         'age' : age,
         'address' : address,
         'hobbies' : hobbies,
         'is_married' : is_married,
         'list_school':{'school_name' : key_name,
                        'year_in' : year_in,
                        'year_out' : year_out,
                        'major' : major},
         'skills' : {'skill_name' : skill_name,
                     'level' : level},
         'interest_in_coding' : interest_in_coding
    } 
    
    return json.dumps(a)





print(biodata("Dhany",
              25,
              'Medan',
              hobbies = ['makan','tidur']
))
