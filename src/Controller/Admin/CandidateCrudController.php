<?php

namespace App\Controller\Admin;

use App\Entity\Candidate;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CandidateCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Candidate::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('lastname'),
            TextField::new('firstname'),
            AssociationField::new('gender'),
            DateField::new('birthDate'),
            CountryField::new('birthCity'),
            TelephoneField::new('phone'),
            CountryField::new('city'),
            BooleanField::new('availability'),
            DateField::new('registratedAt'),
            // TextField::new('sectorActivity'),
            AssociationField::new('passport'),
            AssociationField::new('pictureProfil'),
            AssociationField::new('curriculumVitae'),
            AssociationField::new('experience'),
            AssociationField::new('category'),
        ];
    }
    
}
