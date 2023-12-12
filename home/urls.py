from django.urls import path
from . import views 

urlpatterns = [
  path('', views.creerIndex, name='creerIndex'),
  path('afficherPage/<str:cours>/<str:niveau>/<int:id_chapitre>/<int:id_section>', views.afficherPage, name='afficherPage'),
  path('afficherPresentation/<str:cours>', views.afficherPresentation, name='afficherPresentation'),
  path('afficherModeleQuiz/<str:niveau>/<str:chapitre>/<int:id>', views.afficherModeleQuiz, name='afficherModeleQuiz'),
  path('afficherPartage', views.afficherPartage, name='afficherPartage'),
  path('afficherConnexion', views.afficherConnexion, name='afficherConnexion'),
  path('afficherSandbox', views.afficherSandbox, name='afficherSandbox')
]