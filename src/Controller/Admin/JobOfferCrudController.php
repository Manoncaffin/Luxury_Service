<?php

namespace App\Controller\Admin;

use App\Entity\JobOffer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class JobOfferCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return JobOffer::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            NumberField::new('reference'),
            TextField::new('titleOffer'),
            AssociationField::new('category'),
            AssociationField::new('customer'),
            TextField::new('location'),
            NumberField::new('salary'),
            TextEditorField::new('description'),
            TextField::new('statusOffer'),
            DateField::new('createdAt'),
            DateField::new('closingDate'),
        ];
    }
    
}
