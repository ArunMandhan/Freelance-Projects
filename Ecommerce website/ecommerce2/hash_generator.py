import hashlib

path = r'C:\laragon\www\php_project\ecommerce2\assets\imgs\Beauty.jpg'



with open(path, 'rb') as opened_file:
    content = opened_file.read()
    sha384 = hashlib.sha384()
    
    sha384.update(content)
    
    print('Result')
    print()
    print('{}:{}'.format(sha384.name, sha384.hexdigest()))

 
   
    
