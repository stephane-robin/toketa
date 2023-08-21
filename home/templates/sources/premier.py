nombre = 438
liste_facteurs = []

def premier(nbre):
    i = 2
    while i < nbre and nbre % i != 0:
        i = i + 1

    if i == nbre:
        return True
    else:
        return False

liste_diviseurs = []
max = nombre // 2

for i in range(1, max + 1):
    if nombre % i == 0:
        liste_diviseurs.append(i)

print(liste_diviseurs)