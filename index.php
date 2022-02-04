<?php
using namespace ;
 
struct element
{
int vik;
string adres;
string name;
};
void AddStruct(element*z)
{
cout <<"\nVvedit name: "; cin>>z->name;
cin.ignore();
cout << "\nVvedit adres: "; getline(cin,z->adres);
cout <<"\nVvedit vik: "; cin>>z->vik;
}
struct list;
{
element elem;
list*next;
};
 
typedef list * ptr;
void prints(element* z)
{
cout<<z->adres <<endl;
cout<<z->name <<endl;
cout<<z->vik <<endl;
}
ptr AddElem(ptr head, element elem)
{
ptr x;
x = (list*)malloc(sizeof(list));
x->elem=elem;
x->next = head;
head = x;
return head;
}
 
void Print(ptr head)
{
for(ptr x = head; x!=NULL; x=x->next)
prints(&head->elem);
cout<<endl;
}
 
/*ptr Init(ptr head, int n)
{
int elem;
cout«"Enter number\n";
for(int i = 0; i<n; i++)
{
cin»elem;
head = AddElem(head, elem);
}
return head;
}*/
 
int main()
{
ptr head;
head = NULL; 
element A;
cout<<"Vvedit dani!\n";
AddStruct(&A);
while(A.name.compare("#")!=0)
{
head = AddElem(head,A);
AddStruct(&A);
}
cout<<"\nNew List: ";
Print(head);
system("pause");
return 0;
 
}
?>
