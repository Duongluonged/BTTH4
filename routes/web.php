<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\IssueController;
use Illuminate\Support\Facades\Route;

// hien thi trang index
Route::get('/', [IssueController::class, 'index'])->name('issue.index');

// Them
Route::get('/issue/create', [IssueController::class, 'create'])->name('issue.create');

// Luu issue da them
Route::post('/issue', [IssueController::class, 'store'])->name('issue.store');

// xem chi tiet
Route::get('/issue/{id}', [IssueController::class, 'show'])->name('issue.show');

// bat dau edit
Route::get('/issue/{id}/edit', [IssueController::class, 'edit'])->name('issue.edit');

// luu thong tin edit
Route::put('/issue/{id}', [IssueController::class, 'update'])->name('issue.update');

// xoa item + tbao
Route::delete('/issue/{id}', [IssueController::class, 'destroy'])->name('issue.destroy');
