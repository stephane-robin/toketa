from django.urls import path
from . import views 

urlpatterns = [
  path('', views.creerIndex, name='creerIndex'),
  path('afficherPage/<str:niveau>/<str:chapitre>/<int:id>', views.afficherPage, name='afficherPage'),
  path('afficherPresentation/<str:niveau>', views.afficherPresentation, name='afficherPresentation'),
  path('testNotebook', views.testNotebook, name='testNotebook'),
  path('afficherModeleQuiz/<str:niveau>/<str:chapitre>/<int:id>', views.afficherModeleQuiz, name='afficherModeleQuiz')
]