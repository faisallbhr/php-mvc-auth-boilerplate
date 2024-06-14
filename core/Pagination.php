<?php
namespace core;

class Pagination
{
    private $currentPage;
    private $totalPages;

    public function __construct($currentPage, $totalPages)
    {
        $this->currentPage = $currentPage;
        $this->totalPages = $totalPages;
    }

    public function render()
    {
        if ($this->totalPages <= 1) {
            return '';
        }

        $html = '<ul class="pagination">';

        if ($this->currentPage > 1) {
            $html .= $this->getPageItem($this->currentPage - 1, '&laquo;', false);
        } else {
            $html .= $this->getPageItem(1, '&laquo;', true);
        }

        $html .= $this->renderPaginationItems();

        if ($this->currentPage < $this->totalPages) {
            $html .= $this->getPageItem($this->currentPage + 1, '&raquo;', false);
        } else {
            $html .= $this->getPageItem($this->totalPages, '&raquo;', true);
        }

        $html .= '</ul>';

        return $html;
    }

    private function renderPaginationItems()
    {
        $html = '';
        $range = 2;
        $start = max(1, $this->currentPage - $range);
        $end = min($this->totalPages, $this->currentPage + $range);

        if ($start > 1) {
            $html .= $this->getPageItem(1, '1');
            if ($start > 2) {
                $html .= $this->getPageItem($start - 1, '...');
            }
        }

        for ($i = $start; $i <= $end; $i++) {
            $html .= $this->getPageItem($i, $i, $this->currentPage == $i);
        }

        if ($end < $this->totalPages) {
            if ($end < $this->totalPages - 1) {
                $html .= $this->getPageItem($end + 1, '...');
            }
            $html .= $this->getPageItem($this->totalPages, $this->totalPages);
        }

        return $html;
    }

    private function getPageItem($page, $label, $active = false)
    {
        if ($active) {
            return '<li><span>' . $label . '</span></li>';
        } else {
            return '<li><a href="?page=' . $page . '">' . $label . '</a></li>';
        }
    }
}