from os import waitpid
import pickle
book = {}
book['title']  = 'Python Programming'
book['page link'] = 'https://www.apple.com/'
book['id'] = 'Apple'
book['tag'] = ('Iphone 8', 'Iphone 6', 'Iphone X', 'Iphone 11pro')
book['Launch'] = True

with open ('Iphone X,XS,XX max', 'wb') as file:
    pickle.dump(book, file)

with open('Iphone X,XS,XX max', 'rb') as file:
    output= pickle.load(file)
    print(output)
