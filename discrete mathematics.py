input random
def display(room):
print(room)

room=[[1,1,1,1],
              [1,1,1,1],
             [1,1,1,1],
            [1,1,1,1]
          ]
print("print all rooms are dirty")
display(room)
x=0
y=0

while x<4:
   while y<4:
       room[x][y]= random.choice([0,1])
       y+=1
       x+=1
   y=0
print("I detect random dirt in this room")
display(room)
x=0
y=0
z=0
while x<4:
   while y<4:
      if room[x][y]==1
         print("vacuum is now in location,",x,y)
         room[x][y]=0
         print("cleaned",x,y)
         z+=1
      y+=1
   x+=1
   y=0

pro= (100-((z/16)*100))
display(room)
print("perfomance= " pro,''%)
   










